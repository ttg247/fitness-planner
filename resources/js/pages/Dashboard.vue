<script setup>
import { useUserStore } from '@/stores/useUserStore'
import { useWorkoutStore } from '@/stores/useWorkoutStore'
import { computed } from 'vue'
import { useRouter } from 'vue-router'

const userStore = useUserStore()
const workoutStore = useWorkoutStore()
const router = useRouter()

const currentStats = computed(() => ({
  weight: userStore.weight,
  height: userStore.height,
  goalWeight: userStore.goalWeight,
}))

const workoutStreak = computed(() => workoutStore.streak)
const totalWorkouts = computed(() => workoutStore.completedWorkouts.length)

function goToTodayWorkout() {
  router.push('/workout')
}
</script>

<template>
  <div class="max-w-4xl mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold mb-6">🏠 Dashboard</h1>

    <div class="grid md:grid-cols-2 gap-6 mb-6">
      <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-xl font-semibold mb-2">📊 Your Stats</h2>
        <ul class="space-y-1 text-gray-700">
          <li>Weight: {{ currentStats.weight }}kg</li>
          <li>Height: {{ currentStats.height }}cm</li>
          <li>Goal Weight: {{ currentStats.goalWeight }}kg</li>
        </ul>
      </div>

      <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-xl font-semibold mb-2">🔥 Your Progress</h2>
        <ul class="space-y-1 text-gray-700">
          <li>Workout Streak: {{ workoutStreak }} days</li>
          <li>Total Workouts Completed: {{ totalWorkouts }}</li>
        </ul>
      </div>
    </div>

    <div class="text-center">
      <button
        @click="goToTodayWorkout"
        class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700"
      >
        Start Today’s Workout 💪
      </button>
    </div>
  </div>
</template>

<style scoped>
h2 {
  margin-bottom: 0.5rem;
}
</style>
