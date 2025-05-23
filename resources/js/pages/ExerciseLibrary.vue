<script setup>
import { ref, computed } from 'vue'
import { useExerciseStore } from '@/stores/useExerciseStore'

const exerciseStore = useExerciseStore()
const selectedBodyPart = ref('all')

const filteredExercises = computed(() => {
  if (selectedBodyPart.value === 'all') {
    return exerciseStore.exercises
  }
  return exerciseStore.exercises.filter(
    (exercise) => exercise.bodyPart === selectedBodyPart.value
  )
})

const bodyParts = ['all', 'abs', 'arms', 'legs', 'chest', 'back', 'shoulders']
</script>

<template>
  <div class="max-w-4xl mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold mb-6">Exercise Library</h1>

    <div class="flex gap-2 flex-wrap mb-6">
      <button
        v-for="part in bodyParts"
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

    <div class="grid md:grid-cols-2 gap-6">
      <div
        v-for="exercise in filteredExercises"
        :key="exercise.id"
        class="p-4 rounded-xl bg-white shadow flex gap-4 items-start"
      >
        <img
          :src="exercise.gif"
          alt="exercise gif"
          class="w-24 h-24 rounded object-cover"
        />
        <div>
          <h2 class="text-xl font-semibold">{{ exercise.name }}</h2>
          <p class="text-sm text-gray-500 capitalize">
            {{ exercise.bodyPart }} • {{ exercise.reps }} reps
          </p>
          <p class="mt-2 text-gray-600">{{ exercise.description }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
button {
  transition: background 0.3s ease, color 0.3s ease;
}
</style>
