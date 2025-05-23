import { defineStore } from 'pinia'
import { ref } from 'vue'

export const useUserStore = defineStore('user', () => {
  // User stats
  const weight = ref(70) // default weight in kg
  const height = ref(170) // default height in cm
  const goalWeight = ref(65) // goal weight in kg

  // You can add methods to update these
  function updateStats(newWeight, newHeight, newGoal) {
    if (newWeight) weight.value = newWeight
    if (newHeight) height.value = newHeight
    if (newGoal) goalWeight.value = newGoal
  }

  return {
    weight,
    height,
    goalWeight,
    updateStats,
  }
})
