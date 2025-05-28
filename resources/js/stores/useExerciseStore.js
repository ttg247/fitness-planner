import { defineStore } from 'pinia'

export const useExerciseStore = defineStore('exercise', {
	state: () => ({
		exercises: [
			{
				id: 1,
				name: 'Push Ups',
				bodyPart: 'chest',
				reps: 15,
				gif: 'https://media.giphy.com/media/l0MYKDRP0L6X1xMMY/giphy.gif',
				description: 'A basic upper body exercise targeting the chest, shoulders, and triceps.',
			},
			{
				id: 2,
				name: 'Jumping Jacks',
				bodyPart: 'full body',
				reps: 30,
				gif: 'https://media.giphy.com/media/3o6ZsZvYbXm2PfJbHG/giphy.gif',
				description: 'A cardio exercise that works the entire body and increases heart rate.',
			},
			
		],
	}),
})
