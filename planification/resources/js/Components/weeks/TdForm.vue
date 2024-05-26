<script setup>
import Button from '@/Components/ui/button/Button.vue';
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogTrigger,
} from '@/Components/ui/dialog';
import Label from '@/Components/ui/label/Label.vue';
import {
    Select,
    SelectContent,
    SelectGroup,
    SelectItem,
    SelectLabel,
    SelectTrigger,
    SelectValue,
} from '@/Components/ui/select'
const props = defineProps({
    section: {
        type: Object,
        required: true
    },
    rooms: {
        type: Array,
        required: true,
    },
    modules: {
        type: Array,
        required: true,
    },
    teachers: {
        type: Array,
        required: true,
    },
    date: {
        type: Date,
        required: true,
    },
    week_id: {
        type: Number,
        required: true,
    }
})

</script>

<template>
    <div class="h-full border-4  rounded-xl justify-center items-center">
        <Dialog>
            <DialogTrigger as-child>
                <Button variant="outline">
                    Add
                </Button>
            </DialogTrigger>
            <DialogContent class="sm:max-w-[425px]">
                <DialogHeader>
                    <DialogTitle>Insert TD</DialogTitle>
                </DialogHeader>
                <div class="grid gap-4 py-4">
                    <div class="grid grid-cols-4 items-center gap-4">
                        <Label>Module:</Label>
                        <Select class="col-span-3">
                            <SelectTrigger class="col-span-3">
                                <SelectValue placeholder="Select a module" />
                            </SelectTrigger>
                            <SelectContent>
                                <SelectGroup>
                                    <SelectLabel>Modules</SelectLabel>
                                    <SelectItem :value="mod.id" v-for="mod in props.modules" >
                                        {{ mod.module }}
                                    </SelectItem>
                                </SelectGroup>
                            </SelectContent>
                        </Select>
                    </div>
                    <div class="grid grid-cols-4 items-center gap-4">
                        <Label>Teacher:</Label>
                        <Select class="col-span-3">
                            <SelectTrigger class="col-span-3">
                                <SelectValue placeholder="Select a teacher" />
                            </SelectTrigger>
                            <SelectContent>
                                <SelectGroup>
                                    <SelectLabel>Teachers</SelectLabel>
                                    <SelectItem :value="mod.id" v-for="mod in props.teachers" v-if="mod.td == true">
                                        {{ mod.teacher_name }}
                                    </SelectItem>
                                </SelectGroup>
                            </SelectContent>
                        </Select>
                    </div>
                    <div class="grid grid-cols-4 items-center gap-4">
                        <Label>Room:</Label>
                        <Select class="col-span-3">
                            <SelectTrigger class="col-span-3">
                                <SelectValue placeholder="Select a room" />
                            </SelectTrigger>
                            <SelectContent>
                                <SelectGroup>
                                    <SelectLabel>Rooms</SelectLabel>
                                    <SelectItem :value="mod.id" v-for="mod in props.rooms" v-if="mod.capacity_teaching >= props.section.nb_students">
                                        {{ mod.room }}
                                    </SelectItem>
                                </SelectGroup>
                            </SelectContent>
                        </Select>
                    </div>
                </div>
                <DialogFooter>
                    <Button type="submit">
                        Insert
                    </Button>
                </DialogFooter>
            </DialogContent>
        </Dialog>

    </div>
</template>