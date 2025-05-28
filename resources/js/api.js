import axios from 'axios'

// Create an Axios instance
const api = axios.create({
  baseURL: 'http://localhost:8000/api', 
  headers: {
    Accept: 'application/json',
  },
  //withCredentials: true, // Needed for Sanctum to handle cookies
})

/**  Optional: Add a request interceptor if needed
api.interceptors.request.use(
  config => {
    // Example: Add token manually if needed
    // const token = localStorage.getItem('token')
    // if (token) {
    //   config.headers.Authorization = `Bearer ${token}`
    // }
    return config
  },
  error => Promise.reject(error)
)*/

export default api
