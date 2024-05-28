<script setup>
const props = defineProps({
    modules: {
        type: Array,
        required: true
    },
    rooms: {
        type: Array,
        required: true
    },
    section: {
        type: Object,
        required: true
    },
    week_id: {
        type: Number,
        required: true
    },
    timing_id: {
        type: Number,
        required: true
    },
    date: {
        type: Date,
        required: true
    }
})

import { ref, computed } from "vue";
import Button from "../ui/button/Button.vue";
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogTrigger,
} from '@/Components/ui/dialog'
import {
    Popover,
    PopoverContent,
    PopoverTrigger,
} from '@/Components/ui/popover'
import { Label } from '@/Components/ui/label'
import { Input } from '@/Components/ui/input'
import {
    Select,
    SelectContent,
    SelectGroup,
    SelectItem,
    SelectLabel,
    SelectTrigger,
    SelectValue,
} from '@/Components/ui/select'
const SelectedModuleId = ref(null);
const SelectedTeacherId = ref(null);
const SelectedRoomId = ref(null);
const SelectedModule = computed(() => {
    return props.modules.find(module => module.id === SelectedModuleId.value);
});
const GetDateFormat = (date) => {
    return new Intl.DateTimeFormat('en-CA', {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit'
    }).format(date);
}
const DependentTeachers = computed(() => {
    return SelectedModule.value ? SelectedModule.value.teachers : [];
});
const open = ref(false)
const value = ref('')
const frameworks = [
    { value: 'next.js', label: 'Next.js' },
    { value: 'sveltekit', label: 'SvelteKit' },
    { value: 'nuxt.js', label: 'Nuxt.js' },
    { value: 'remix', label: 'Remix' },
    { value: 'astro', label: 'Astro' },
]
</script>


<template>
    <Dialog>
        <DialogTrigger as-child class="absolute top-0 left-0">
            <Button variant="destructive" size="icon" class=" h-6 w-6  bg-slate-900">
                +
            </Button>
        </DialogTrigger>
        <DialogContent class="sm:min-w-[600px] sm:min-h-[400px] ">
            <DialogHeader>
                <DialogTitle>Add A TP</DialogTitle>
                <DialogDescription>
                    Make changes to your profile here. Click save when you're done.
                </DialogDescription>
            </DialogHeader>
            <div class="grid gap-4 py-4">
                <div class="grid grid-cols-4 items-center gap-4">
                    <Label for="name" class="text-right text-xl">
                        Module
                    </Label>
                    <Select v-model="SelectedModuleId">
                        <SelectTrigger class="col-span-3">
                            <SelectValue placeholder="Select a Module" />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectGroup>
                                <SelectLabel>Modules</SelectLabel>
                                <SelectItem v-for="mod in props.modules" :key="mod.id" :value="mod.id">
                                    {{ mod.module }}
                                </SelectItem>
                            </SelectGroup>
                        </SelectContent>
                    </Select>
                </div>
                <div class="grid grid-cols-4 items-center gap-4">
                    <Label for="username" class="text-right text-xl">
                        Teacher
                    </Label>
                    <!-- <Select v-model="SelectedTeacherId" >
                        <SelectTrigger class="col-span-3" >
                            <SelectValue placeholder="Select a teacher" />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectGroup>
                                <SelectLabel>Teachers</SelectLabel>
                                <SelectItem v-for="teacher in DependentTeachers" :key="teacher.id" :value="teacher.id">
                                    {{ teacher.teacher_name }}
                                </SelectItem>
                            </SelectGroup>
                        </SelectContent>
                    </Select> -->
                    <Popover>
                        <PopoverTrigger as-child>
                            <Button variant="outline" class="col-span-3">
                                Open popover
                            </Button>
                        </PopoverTrigger>
                        <PopoverContent class="w-80">
                            <div class="grid gap-4">
                                
                            </div>
                        </PopoverContent>
                    </Popover>
                </div>
                <div class="grid grid-cols-4 items-center gap-4">
                    <Label for="username" class="text-right text-xl">
                        Room
                    </Label>
                    <Select v-model="SelectedRoomId">
                        <SelectTrigger class="col-span-3">
                            <SelectValue placeholder="Select a room" />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectGroup>
                                <SelectLabel>Rooms</SelectLabel>
                                <SelectItem v-for="room in props.rooms" :key="room.id" :value="room.id">
                                    {{ room.room }}
                                </SelectItem>
                            </SelectGroup>
                        </SelectContent>
                    </Select>
                </div>
            </div>
            <DialogFooter>
                <Button type="submit">
                    Save changes
                </Button>
            </DialogFooter>
        </DialogContent>
    </Dialog>
</template>