<script setup>
import { onMounted } from 'vue'
import { useUserStore } from '@/stores/useUserStore'
import { useWorkoutStore } from '@/stores/useWorkoutStore'

const userStore = useUserStore()
const workoutStore = useWorkoutStore()

onMounted(() => {
  if (!workoutStore.plan.length) {
    workoutStore.generatePlan(userStore)
  }
})
</script>

<template>
  <div class="max-w-3xl mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold mb-6">Your Workout Plan</h1>

    <div v-if="workoutStore.plan.length === 0" class="text-gray-600">
      No plan available. Please go to the setup page first.
    </div>

    <div v-else class="grid gap-6">
      <div
        v-for="(exercise, index) in workoutStore.plan"
        :key="index"
        class="exercise-card"
      >
        <div class="flex justify-between items-center mb-2">
          <h2 class="text-xl font-semibold">{{ exercise.name }}</h2>
          <span class="text-sm text-gray-500">{{ exercise.frequency }}</span>
        </div>
        <div class="flex items-center gap-4">
          <img
            :src="exercise.gif"
            alt="exercise gif"
            class="w-28 h-28 rounded shadow"
          />
          <div>
            <p><strong>Reps:</strong> {{ exercise.reps }}</p>
            <p><strong>Target:</strong> {{ exercise.bodyPart }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.exercise-card {
  padding: 1.25rem;
  background: #f9fafb;
  border-radius: 1rem;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
  transition: transform 0.2s ease;
}
.exercise-card:hover {
  transform: scale(1.02);
}
</style>
