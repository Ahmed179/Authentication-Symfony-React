import axiosRequest from "./axiosPrivateRoutes"
export const getUsers = () =>
  axiosRequest({
    method: "get",
    url: "/user/users"
  })
