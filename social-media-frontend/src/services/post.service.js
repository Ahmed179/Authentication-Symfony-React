import axiosRequest from "./axiosPrivateRoutes"
export const getPosts = () =>
  axiosRequest({
    method: "get",
    url: "/posts"
  })

export const createPost = data =>
  axiosRequest({
    method: "post",
    url: "/post",
    data
  })

export const updatePost = (id, data) =>
  axiosRequest({
    method: "put",
    url: `/post/${id}`,

    data
  })

export const deletePost = id =>
  axiosRequest({
    method: "delete",
    url: `/post/${id}`
  })
