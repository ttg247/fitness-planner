<script setup>
import { computed } from 'vue'
import { useWorkoutStore } from '@/stores/useWorkoutStore'
import { useUserStore } from '@/stores/useUserStore'

const workoutStore = useWorkoutStore()
const userStore = useUserStore()

const streak = computed(() => workoutStore.streak)
const totalCompleted = computed(() => workoutStore.completedWorkouts)
</script>

<template>
  <div class="max-w-2xl mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold mb-4">Your Progress</h1>

    <div class="grid gap-6">
      <div class="bg-white shadow rounded-xl p-6">
        <h2 class="text-xl font-semibold mb-2">Current Streak</h2>
        <p class="text-4xl font-bold text-green-600">{{ streak }} 🔥</p>
        <p class="text-gray-600 mt-2">Keep going! You're doing great.</p>
      </div>

      <div class="bg-white shadow rounded-xl p-6">
        <h2 class="text-xl font-semibold mb-2">Workouts Completed</h2>
        <p class="text-4xl font-bold text-blue-600">{{ totalCompleted }}</p>
        <p class="text-gray-600 mt-2">Every workout counts.</p>
      </div>

      <div class="bg-white shadow rounded-xl p-6">
        <h2 class="text-xl font-semibold mb-2">Goal</h2>
        <p class="text-lg text-gray-700">
          You want to go from <strong>{{ userStore.weight }}kg</strong> to
          <strong>{{ userStore.goalWeight }}kg</strong>
          at a height of <strong>{{ userStore.height }}cm</strong>.
        </p>
      </div>
    </div>
  </div>
</template>

<style scoped>
h2 {
  margin-bottom: 0.25rem;
}
</style>
