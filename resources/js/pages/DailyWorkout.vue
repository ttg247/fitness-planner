<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import GamificationStats from '@/components/GamificationStats.vue'

const workout = ref(null)
const loading = ref(true)

const fetchWorkout = async () => {
  try {
    const res = await axios.get('/api/workouts/today')
    workout.value = res.data
  } catch (e) {
    console.error('Failed to load workout:', e)
  } finally {
    loading.value = false
  }
}

const completeWorkout = async () => {
  try {
    await axios.post('/api/progress', {
      date: new Date().toISOString().split('T')[0],
      xp: 10 // Flat XP for MVP
    })
    alert("🎉 Workout complete! You've earned 10 XP.")
  } catch (e) {
    alert("Something went wrong. Please try again.")
  }
}

onMounted(fetchWorkout)
</script>

<template>
  <div class="p-4 max-w-xl mx-auto">
    <GamificationStats />

    <h1 class="text-2xl font-bold mb-1">Today's Workout</h1>
    <p class="text-sm text-gray-500 mb-4">{{ new Date().toLocaleDateString() }}</p>

    <div v-if="loading" class="text-gray-500">Loading workout...</div>

    <div v-else-if="workout">
      <div
        v-for="(exercise, i) in workout.exercises"
        :key="i"
        class="mb-4 border p-3 rounded shadow-sm"
      >
        <h2 class="font-semibold">{{ exercise.name }}</h2>
        <p>{{ exercise.reps }} reps</p>
      </div>

      <button
        @click="completeWorkout"
        class="w-full bg-green-600 text-white py-2 mt-6 rounded hover:bg-green-700 transition"
      >
        ✅ Complete Workout
      </button>
    </div>

    <div v-else class="text-red-500">No workout found for today.</div>
  </div>
</template>

<style scoped>
/* Add any specific styles here later */
</style>
