<script setup>
import { ref, computed, onMounted } from 'vue'
import { useProgramStore } from '@/stores/useProgramStore'

const programStore = useProgramStore()
const selectedBodyPart = ref('All')

const filteredPrograms = computed(() => {
	if (selectedBodyPart.value === 'All') {
		return programStore.programs;
	}

	const filtered = programStore.programs.filter(
		(program) => program.difficulty === selectedBodyPart.value
	)
	console.log('Selected:', selectedBodyPart.value);
	console.log('Filtered:', filtered);

	return filtered;
})

const programs = ['All', 'Light', 'Easy', 'Normal', 'Intermediate', 'Advanced']

onMounted(() => {
	programStore.fetchPrograms().then(()=>{
		console.log('Programs:', programStore.programs)
	})
})
</script>

<template>
	<div class="max-w-5xl mx-auto py-8">
		<h1 class="text-3xl font-bold mb-6">Available Programs</h1>

		<div class="flex gap-2 flex-wrap mb-6">
			<button
				v-for="part in programs"
				:key="part"
				:class="[
				'px-4 py-2 rounded-full border',
				selectedBodyPart === part
					? 'bg-blue-500 text-white'
					: 'bg-white text-gray-700 border-gray-300'
				]"
				@click="selectedBodyPart = part"
			>
				{{ part }}
			</button>
		</div>

		<div v-if="programStore.loading" class="text-center">Loading...</div>
		<div v-else-if="programStore.error" class="text-red-500 text-center">{{ exerciseStore.error }}</div>
		<div v-else class="grid md:grid-cols-2 gap-6">
			<div
				v-for="program in filteredPrograms"
				:key="program.id"
				class="p-4 rounded-xl bg-white shadow flex gap-4 items-start"
			>
				<img
					:src="program.gif"
					alt="exercise gif"
					class="w-24 h-24 rounded object-cover"
				/>
				<div>
					<h2 class="text-xl font-semibold">{{ program.name }}</h2>
					<p class="text-sm text-gray-500 capitalize">
						{{ program.difficulty }}
					</p>
					<p class="mt-2 text-gray-600">{{ program.description }}</p>
					<router-link :to="`/programs/${program.id}`" class="btn mt-3 btn-primary btn-rounded">
						Start program
					</router-link>

				</div>
			</div>
		</div>
	</div>
</template>
