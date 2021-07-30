import axios from "axios"
import authHeader from "./auth-header"

const API_URL = "https://localhost:8000/api"

export const getPosts = () =>
  axios({
    method: "get",
    url: API_URL + "/posts",
    headers: authHeader()
  })

export const createPost = data =>
  axios({
    method: "post",
    url: API_URL + "/post",
    headers: authHeader(),
    data
  })

export const updatePost = (id, data) =>
  axios({
    method: "put",
    url: API_URL + "/post/" + id,
    headers: authHeader(),
    data
  })

export const deletePost = id =>
  axios({
    method: "delete",
    url: API_URL + "/post/" + id,
    headers: authHeader()
  })
