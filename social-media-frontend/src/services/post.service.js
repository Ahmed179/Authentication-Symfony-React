import axiosRequest from "./axiosPrivateRoutes"

export const getPosts = (page, perPage) =>
  axiosRequest({
    method: "get",
    url: `/posts/?page=${page}&per_page=${perPage}`
  })

export const getPost = id =>
  axiosRequest({
    method: "get",
    url: `/post/${id}`
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
