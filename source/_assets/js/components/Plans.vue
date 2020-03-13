<template>
    <div>
        <!-- Fist Section  -->
        <section class="mt-16 flex justify-center">
            <div class="container">
                <div class="text-center mb-10">
                    <h5 class="font-bold">برنامه کلاسی</h5>
                    <p class="text-gray-600">برای مشاهده برنامه ترمی، اسم ترم را تایپ کنید</p>
                </div>

                <div class="flex justify-center mt-3">
                    <div class="flex bg-gray-100 rounded-lg m-box-shadow-1">
                        <button class="text-gray-600 rounded-tr-md rounded-br-md">
                            <i class="material-icons px-2">search</i>
                        </button>

                        <input
                            type="text"
                            class="bg-gray-100 outline-none input_search py-2 px-2 rounded-bl-lg rounded-tl-lg"
                            style="direction: ltr;"
                            placeholder="Search by title"
                            v-model="serach_input"
                            autofocus
                            autocomplete="false"
                            @keyup="serachInPlans"
                        />
                    </div>
                </div>
            </div>
        </section>
        <!-- End Fist Section  -->

        <!-- Seconde Section -->
        <section class="mt-12 flex justify-center mb-24 lg:mb-32">
            <div class="container flex justify-center">
                <div class="cards flex flex-wrap justify-center">
                    <a
                        :href="`/plans/${plan._meta.filename}`"
                        class="cards__card bg-gray-200 rounded-lg shadow-xl flex justify-center items-center hover:text-gray-900 text-gray-600"
                        v-for="plan in plans"
                    >
                        <b v-text="plan.title"></b>
                    </a>
                </div>
            </div>
        </section>
        <!-- End Seconde Section -->
    </div>
</template>

<script>
import Fuse from "fuse.js";

export default {
    props: ["prop_plans"],
    data() {
        return {
            plans: this.prop_plans,
            serach_input: null
        };
    },
    methods: {
        serachInPlans() {
            if (this.serach_input == "" || this.serach_input == null) {
                this.plans = this.prop_plans;

                return;
            }

            var options = {
                shouldSort: true,
                threshold: 0.6,
                location: 0,
                distance: 100,
                maxPatternLength: 32,
                minMatchCharLength: 1,
                keys: ["title"]
            };

            let fuse = new Fuse(this.prop_plans, options);

            this.plans = fuse.search(this.serach_input);
        }
    }
};
</script>

<style>
</style>