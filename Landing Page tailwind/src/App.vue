<script setup {
    import Logo from './icon/playstore.svg'
    const menu = ["Home","About us","Blogs","Contact"]
    const features = ["Home","About us","Blogs","Contact"]
}>
<template>
    <div class="w-full min-h-screen font-sans text-gray-900">
        <div class="px-6 mx-auto max-w-6xl">
            <div class="flex items-center justify-between py-10">
            <Logo/>
            <nav class="flex items-center space-x-10">
                <a v-for="item in menu" href="#" class="text-gray-700 hover:text-gray-900">{{item}}</a>
                <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-900">Try now</a>
            </nav>
        </div>
        </div>

        <div class="px-6 mx-auto max-w-6xl">
            <div class="flex">
                <div class="pt-24 w-1/2 ">
                <h1 class="text-6xl font-bold font-display">Learn the ways for staying productive</h1>
                <p class="pt-8 text-xl leading-relaxed text-gray-500">Working at home is definitely a convenient option and makes sense in these unprecedented</p>
                <div class="flex items-center pt-12 space-x-6">
                    <button class="flex justify-center items-center py-4 px-8 font-bold tracking-wide leading-7 text-white bg-blue-600 rounded-xl">Get Tips</button>
                    <button class="flex items-center">Learn More</button>
                </div>
            </div>
            <div>
               <img src="./icon/playstore.svg" alt=""/> 
            </div>
            </div>
        </div>
    
        <div class="bg-gray-50">
            <div class="py-12 px-6 mx-auto max-w-6xl">
                <div class="flex">
                    <div v-for="feature in features" class="flex">
                        <h2 class="text-xl font-display">{{feature}}</h2>
                    </div>
                    <p class="text-sm leading-relax">{{feature}}</p>

                </div>
            </div>
        </div>

    </div>
</template>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>