<script setup>
import { computed } from "vue";
import Cours from "./Cours.vue";
import TdCell from "./TdCell.vue";
import TpCell from "./TpCell.vue";
import TdForm from "./TdForm.vue";
import TpForm from "./TpForm.vue";
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
import { Input } from '@/Components/ui/input'
import { Label } from '@/Components/ui/label'
import { ref } from "vue";
const props = defineProps({
    company: {
        type: Object,
        required: true
    },
    date: {
        type: Date,
        required: true
    },
    timings: {
        type: Array,
        required: true
    },
    sessions: {
        type: Array,
        required: true
    },
    modules: {
        type: Array,
        required: true
    },
    rooms: {
        type: Array,
        required: true
    },
    week_id: {
        type: Number,
        required: true
    }
})
const FilteredSessions = computed(() => {
    let formattedDate = GetDateFormat(props.date);
    return props.sessions.filter(session => session.session_date === formattedDate);
});
const GetDateFormat = (date) => {
    return new Intl.DateTimeFormat('en-CA', {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit'
    }).format(date);
}
const CanCreateCourFromEmit = ref(true);
const ToggleCanCreateCour = () => {
    CanCreateCourFromEmit.value = false;
}
const CanCreateCour = (tim) => {

    let NewFiltered = FilteredSessions.value.filter(session => session.timing_id === tim.id || (session.session_type === 'tp' && session.timing_id == tim.id -1) );
    if (NewFiltered.length > 0) {
        return false;
    }
    return true;
};
</script>

<template>
    <table class=" w-full h-full border-2 ">
        <tr v-for="tim in props.timings" class="relative">
            <template
                v-if="FilteredSessions.filter((s) => s.timing_id == tim.id && s.sessionable_type === 'App\\Models\\Company').length > 0">
                <td :colspan="props.company.sections.length" class="h-32">
                    <Cours
                        :session="FilteredSessions.filter((s) => s.timing_id == tim.id && s.sessionable_type === 'App\\Models\\Company').at(0)"
                        :company="props.company" />
                </td>
            </template>
            <template v-else>

                <template v-for="section in props.company.sections.sort((a, b) => a.section - b.section)">
                    <td class="h-32 w-32"
                        v-if="FilteredSessions.filter(s => s.timing_id === tim.id && s.sessionable_type === 'App\\Models\\Section' && s.sessionable_id === section.id && s.session_type === 'td').length > 0">
                        <TdCell class="bg-red-300 h-full w-full"
                            :session="FilteredSessions.filter(s => s.timing_id === tim.id && s.sessionable_type === 'App\\Models\\Section' && s.sessionable_id === section.id && s.session_type === 'td')[0]"
                            :section="section" />
                    </td>
                    <td class="bg-stone-400"
                        v-else-if="FilteredSessions.filter(s => s.timing_id === tim.id && s.sessionable_type === 'App\\Models\\Section' && s.sessionable_id === section.id && s.session_type === 'tp').length > 0"
                        :rowspan="2">
                        <TpCell
                            :session="FilteredSessions.filter(s => s.timing_id === tim.id && s.sessionable_type === 'App\\Models\\Section' && s.sessionable_id === section.id && s.session_type === 'tp')[0]"
                            :section="section" />
                    </td>
                    <template
                        v-else-if="FilteredSessions.filter(s => s.timing_id === tim.id - 1 && s.sessionable_type === 'App\\Models\\Section' && s.sessionable_id === section.id && s.session_type === 'tp').length > 0">
                    </template>
                    <td v-else class="h-32 relative">
                        <TpForm   v-if="(tim.id ==  1 || tim.id == 2 || tim.id == 4) && FilteredSessions.filter(session => ((session.sessionable_type === 'App\\Models\\Company' || (session.sessionable_type === 'App\\Models\\Section' && session.sessionable_id == section.id)) && session.timing_id == tim.id + 1)).length == 0" :week_id="props.week_id" :date="props.date"
                            :timing_id="tim.id" :rooms="props.rooms" :modules="props.modules" :section="section" />
                        <TdForm @create-td="ToggleCanCreateCour" :week_id="props.week_id" :date="props.date"
                            :timing_id="tim.id" :rooms="props.rooms" :modules="props.modules" :section="section" />
                    </td>

                </template>

            </template>
            <Dialog>
                <DialogTrigger as-child >
                    <Button variant="destructive" size="icon" class="absolute top-1 rounded-full right-1 h-6 w-6  bg-slate-900" v-if="CanCreateCour(tim) && CanCreateCourFromEmit">
                        +
                    </Button>
                </DialogTrigger>
                <DialogContent class="sm:max-w-[425px]">
                    <DialogHeader>
                        <DialogTitle>Add A Cour</DialogTitle>
                        <DialogDescription>
                            Make changes to your profile here. Click save when you're done.
                        </DialogDescription>
                    </DialogHeader>
                    <div class="grid gap-4 py-4">
                        <div class="grid grid-cols-4 items-center gap-4">
                            <Label for="name" class="text-right">
                                Name
                            </Label>
                            <Input id="name" value="Pedro Duarte" class="col-span-3" />
                        </div>
                        <div class="grid grid-cols-4 items-center gap-4">
                            <Label for="username" class="text-right">
                                Username
                            </Label>
                            <Input id="username" value="@peduarte" class="col-span-3" />
                        </div>
                    </div>
                    <DialogFooter>
                        <Button type="submit">
                            Save changes
                        </Button>
                    </DialogFooter>
                </DialogContent>
            </Dialog>
        </tr>

    </table>
</template>

