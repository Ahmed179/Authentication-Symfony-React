import React, { useState } from "react"
import { useDispatch } from "react-redux"
import { createPost } from "actions/post"
import HomeIcon from "@material-ui/icons/Home"
import FeaturedPlayListOutlinedIcon from "@material-ui/icons/FeaturedPlayListOutlined"
import AssignmentTurnedInOutlinedIcon from "@material-ui/icons/AssignmentTurnedInOutlined"
import PeopleAltOutlinedIcon from "@material-ui/icons/PeopleAltOutlined"
import NotificationsOutlinedIcon from "@material-ui/icons/NotificationsOutlined"
import SearchIcon from "@material-ui/icons/Search"
import LanguageIcon from "@material-ui/icons/Language"
import { useHistory } from "react-router-dom"
import { Avatar, Button } from "@material-ui/core"
import Modal from "../Modal"
import "react-dropdown/style.css"
import "./style.css"

function Navbar() {
  const dispatch = useDispatch()
  const history = useHistory()

  const [isModalOpen, setIsModalOpen] = useState(false)

  async function doCreatePost({ content }) {
    await dispatch(createPost(content))
  }

  function handleQuestion(data) {
    doCreatePost(data)
    setIsModalOpen(false)
  }

  function doLogout() {
    localStorage.removeItem("token")
    localStorage.removeItem("user")
    history.push("/login")
  }

  return (
    <div className="qHeader">
      <div className="qHeader__logo">
        <img src="https://i.ibb.co/BwWXYhg/ahmed.png" alt="" />
      </div>

      <div className="qHeader__icons">
        <div className="active qHeader__icon">
          <HomeIcon />
        </div>
        <div className="qHeader__icon">
          <FeaturedPlayListOutlinedIcon />
        </div>
        <div className="qHeader__icon">
          <AssignmentTurnedInOutlinedIcon />
        </div>
        <div className="qHeader__icon">
          <PeopleAltOutlinedIcon />
        </div>
        <div className="qHeader__icon">
          <NotificationsOutlinedIcon />
        </div>
      </div>

      <div className="qHeader__input">
        <SearchIcon />
        <input type="text" placeholder="Search Quora" />
      </div>
      <div className="qHeader__Rem">
        <div className="qHeader__avatar">
          <Avatar
            className="Avatar"
            src="https://www.findcollab.com/img/user-folder/5d95c9a53b2e1qq.png"
          />
        </div>
        <LanguageIcon />
        <Button onClick={() => setIsModalOpen(true)}>Add Post</Button>
        <Modal
          title="Create a post"
          isOpen={isModalOpen}
          setIsOpen={setIsModalOpen}
          onSubmit={handleQuestion}
          submitBtn="Add Post"
        />
        <div>
          <ul className="navbar-nav me-auto mb-2 mb-md-0">
            <li className="nav-item">
              <div className="nav-link logout-btn" onClick={doLogout}>
                Logout
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  )
}

export default Navbar
