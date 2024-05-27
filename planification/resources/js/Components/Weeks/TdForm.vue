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
import { Trash } from 'lucide-vue-next';
import { Label } from '@/Components/ui/label'
import { ref, computed } from 'vue';
import axios from 'axios';
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
    week_id:{
        type: Number,
        required:true
    },
    timing_id:{
        type:Number,
        required:true
    },
    date: {
        type:Date,
        required:true
    }
})
const emit = defineEmits(['create-td']);
const TdCreated = ref(false);
const NewTeacherName = ref('');
const NewModuleName = ref('');
const NewRoomName = ref('');
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
const CreateTd = async () =>{
    let response = await axios.post('/sessions/create',{
        module_id: SelectedModuleId.value,
        teacher_id: SelectedTeacherId.value,
        session_date: GetDateFormat(props.date),
        timing_id: props.timing_id,
        week_id: props.week_id,
        room_id : SelectedRoomId.value,
        sessionable_type : 'App\\Models\\Section',
        session_type: 'td',
        sessionable_id: props.section.id,
    });
    const session = response.data;
    NewTeacherName.value = session.teacher.teacher_name;
    NewModuleName.value = session.module.module;
    NewRoomName.value = session.room.room;
    TdCreated.value= true;
    emit('create-td');
}
</script>
<template>
    <Dialog v-if="!TdCreated" >
        <DialogTrigger as-child >
            <Button variant="outline">
                Add
            </Button>
        </DialogTrigger>
        <DialogContent class="max-w-[600px] min-h-[400px]">
            <DialogHeader>
                <DialogTitle>Add a TD</DialogTitle>
                <DialogDescription>
                    Make changes here. Click save when you're done. 
                </DialogDescription>
            </DialogHeader>
            <div class="grid gap-4 py-4 ">
                <div class="grid grid-cols-4 items-center gap-4">
                    <Label for="name" class="text-right text-xl">
                        Module 
                    </Label>
                    <Select  v-model="SelectedModuleId">
                        <SelectTrigger class="col-span-3" >
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
                <div class="grid grid-cols-4 items-center gap-4">
                    <Label for="username" class="text-right text-xl">
                        Room
                    </Label>
                    <Select v-model="SelectedRoomId">
                        <SelectTrigger class="col-span-3" >
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
                <Button @click="CreateTd" type="submit">
                    Save changes
                </Button>
            </DialogFooter>
        </DialogContent>
    </Dialog>
    <div v-else class="h-full w-32 relative">
        <div class="w-full bg-slate-400">TD</div>
        <div>{{ NewTeacherName }}</div>
        <div>{{ NewModuleName }}</div>
        <div>{{ NewRoomName }}</div>
        
    </div>
</template>