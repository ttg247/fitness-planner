<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const xp = ref(0)
const streak = ref(0)
const xpToLevel = 100 // Level threshold for MVP

const fetchStats = async () => {
  const res = await axios.get('/api/user-stats') // Placeholder endpoint
  xp.value = res.data.xp
  streak.value = res.data.streak
}

onMounted(fetchStats)
</script>

<template>
  <div class="mb-6">
    <!-- XP BAR -->
    <div class="mb-4">
      <div class="text-sm font-semibold mb-1">XP: {{ xp }} / {{ xpToLevel }}</div>
      <div class="w-full bg-gray-200 h-3 rounded-full overflow-hidden">
        <div
          class="h-full bg-green-500 transition-all duration-500"
          :style="{ width: (xp / xpToLevel * 100) + '%' }"
        ></div>
      </div>
    </div>

    <!-- STREAK COUNTER -->
    <div class="flex items-center gap-2">
      <span class="text-xl">🔥</span>
      <span class="font-bold text-lg">{{ streak }}-Day Streak</span>
    </div>
  </div>
</template>

<style scoped>
/* You can add hover effects or animation here later if needed */
</style>
