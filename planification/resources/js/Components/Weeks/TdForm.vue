<script setup>
import Button from '../ui/button/Button.vue';
import {
    Select,
    SelectContent,
    SelectGroup,
    SelectItem,
    SelectLabel,
    SelectTrigger,
    SelectValue,
} from '@/Components/ui/select'
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogTrigger,
} from '@/Components/ui/dialog'
import { Input } from '@/Components/ui/input'
import { Label } from '@/Components/ui/label'
import { ref, computed } from 'vue';
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
    }
})

// const SelectedModule = ref(null)
// const DependentTeachers = computed(() => {
//     return SelectedModule.value ? SelectedModule.value.teachers : [];
// });
const SelectedModuleId = ref(null);
const SelectedTeacherId = ref(null);

const SelectedModule = computed(() => {
    return props.modules.find(module => module.id === SelectedModuleId.value);
});

const DependentTeachers = computed(() => {
    return SelectedModule.value ? SelectedModule.value.teachers : [];
});
</script>
<template>
    <Dialog>
        <DialogTrigger as-child>
            <Button variant="outline">
                Add
            </Button>
        </DialogTrigger>
        <DialogContent class="sm:max-w-[425px]">
            <DialogHeader>
                <DialogTitle>Add a TD</DialogTitle>
                <DialogDescription>
                    Make changes here. Click save when you're done. 
                </DialogDescription>
            </DialogHeader>
            <div class="grid gap-4 py-4">
                <div class="grid grid-cols-4 items-center gap-4">
                    <Label for="name" class="text-right">
                        Module 
                    </Label>
                    <Select  v-model="SelectedModuleId">
                        <SelectTrigger class="col-span-3" >
                            <SelectValue placeholder="Select a fruit" />
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
                    <Label for="username" class="text-right">
                        Teachr
                    </Label>
                    <Select v-model="SelectedTeacherId" >
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
                    </Select>
                </div>
            </div>
            <DialogFooter>
                <Button >
                    Save changes
                </Button>
            </DialogFooter>
        </DialogContent>
    </Dialog>

</template>