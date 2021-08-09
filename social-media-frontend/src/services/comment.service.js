import axiosRequest from "./axiosPrivateRoutes"

export const createComment = data =>
  axiosRequest({
    method: "post",
    url: "/comment",
    data
  })

export const updateComment = (id, data) =>
  axiosRequest({
    method: "put",
    url: `/comment/${id}`,
    data
  })

export const deleteComment = id =>
  axiosRequest({
    method: "delete",
    url: `/comment/${id}`
  })
