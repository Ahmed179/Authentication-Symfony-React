import axios from "axios"

const API_URL = "https://localhost:8000/api"
const axiosRequest = axios.create({ baseURL: API_URL })
axiosRequest.interceptors.request.use(config => {
  const token = localStorage.getItem("token")
  if (token) config.headers["Authorization"] = "Bearer " + token
  return config
})

export default axiosRequest
