import { defineStore } from 'pinia'
import { ref } from 'vue'

export const useWorkoutStore = defineStore('workout', () => {
  const completedWorkouts = ref([]) // Array of dates (ISO strings)
  const streak = ref(0)

  function logWorkout() {
    const today = new Date().toISOString().slice(0, 10) // YYYY-MM-DD

    if (!completedWorkouts.value.includes(today)) {
      completedWorkouts.value.push(today)
      updateStreak()
    }
  }

  function updateStreak() {
    if (completedWorkouts.value.length === 0) {
      streak.value = 0
      return
    }

    // Sort dates
    const sortedDates = completedWorkouts.value.sort()
    let currentStreak = 1

    // Check consecutive days from the end
    for (let i = sortedDates.length - 1; i > 0; i--) {
      const dateA = new Date(sortedDates[i])
      const dateB = new Date(sortedDates[i - 1])
      const diffDays = (dateA - dateB) / (1000 * 60 * 60 * 24)

      if (diffDays === 1) {
        currentStreak++
      } else {
        break
      }
    }

    streak.value = currentStreak
  }

  return {
    completedWorkouts,
    streak,
    logWorkout,
  }
})
