<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import { useUserStore } from '@/stores/useUserStore'

const weight = ref('')
const height = ref('')
const goalWeight = ref('')
const router = useRouter()
const userStore = useUserStore()

const submit = () => {
  userStore.setUserProfile({
    weight: parseFloat(weight.value),
    height: parseFloat(height.value),
    goalWeight: parseFloat(goalWeight.value),
  })
  router.push('/workout-plan')
}
</script>

<template>
  <div class="max-w-md mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Set Up Your Fitness Profile</h1>

    <label class="block mb-2 font-medium">Current Weight (kg)</label>
    <input
      v-model="weight"
      type="number"
      class="input"
      placeholder="e.g. 85"
    />

    <label class="block mb-2 font-medium mt-4">Height (cm)</label>
    <input
      v-model="height"
      type="number"
      class="input"
      placeholder="e.g. 175"
    />

    <label class="block mb-2 font-medium mt-4">Goal Weight (kg)</label>
    <input
      v-model="goalWeight"
      type="number"
      class="input"
      placeholder="e.g. 70"
    />

    <button @click="submit" class="btn mt-6 w-full">Generate Plan</button>
  </div>
</template>

<style scoped>
.input {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #d1d5db;
  border-radius: 0.375rem;
  margin-bottom: 0.5rem;
}
.btn {
  background-color: #3b82f6;
  color: white;
  padding: 0.75rem;
  border-radius: 0.375rem;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.3s ease;
}
.btn:hover {
  background-color: #2563eb;
}
</style>
