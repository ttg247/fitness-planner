import { defineStore } from 'pinia'
import { ref } from 'vue'
import api from '@/api'

export const useExerciseStore = defineStore('exercise', () => {
  const exercises = ref([])
  const loading = ref(false)
  const error = ref(null) 

  async function fetchExercises() {
    loading.value = true
    error.value = null
    try {
      const res = await api.get('/exercises')
      exercises.value = res.data
    } catch (err) {
      console.error(err)
      error.value = 'Failed to load exercises'
    } finally {
      loading.value = false
    }
  }

  return {
    exercises,
    loading,
    error, // ✅ return error too if you want to use it in your component
    fetchExercises,
  }
})
