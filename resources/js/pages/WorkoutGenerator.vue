<script setup>
import { useUserStore } from '@/stores/useUserStore'
import { useExerciseStore } from '@/stores/useExerciseStore'
import { useWorkoutStore } from '@/stores/useWorkoutStore'
import { ref } from 'vue'

const userStore = useUserStore()
const exerciseStore = useExerciseStore()
const workoutStore = useWorkoutStore()

const todayWorkout = ref([])

function generateWorkout() {
  const allExercises = exerciseStore.exercises

  // Select random 3–5 exercises
  const selected = [...allExercises].sort(() => 0.5 - Math.random()).slice(0, 5)

  todayWorkout.value = selected
}
</script>

<template>
  <div class="max-w-3xl mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold mb-4">Today's Workout Plan</h1>

    <div class="mb-6">
      <p>
        You're currently <strong>{{ userStore.weight }}kg</strong> and want to
        reach <strong>{{ userStore.goalWeight }}kg</strong>.
      </p>
      <button
        @click="generateWorkout"
        class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded"
      >
        Generate Plan
      </button>
    </div>

    <div v-if="todayWorkout.length" class="grid gap-6">
      <div
        v-for="exercise in todayWorkout"
        :key="exercise.id"
        class="bg-white shadow rounded-xl p-4"
      >
        <div class="flex items-center gap-4">
          <img :src="exercise.gif" alt="" class="w-24 h-24 object-cover rounded" />
          <div>
            <h2 class="text-xl font-semibold">{{ exercise.name }}</h2>
            <p class="text-gray-600">{{ exercise.description }}</p>
            <p class="text-sm mt-2">
              🔁 {{ exercise.reps }} reps — 💪 Targets: {{ exercise.bodyPart }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
h2 {
  margin-bottom: 0.25rem;
}
</style>
