<template>
    <div>
        <AdminLayout class="flex flex-column">

            <div class="font-poppin font-bold my-6">
                Date: 11th March 2023
            </div>

            <div class="text-red-600">
                Wedding Admin Home
            </div>

            <div class="mt-8">
                <div class="text-center">Countdown</div>
                <count-down id='flipdown' deadline="2023-03-11 11:00:00"></count-down>
            </div>
        </AdminLayout>
    </div>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";
import CountDown from '@/Components/Countdown';
export default {
    components: {AdminLayout, CountDown}
}
</script>
