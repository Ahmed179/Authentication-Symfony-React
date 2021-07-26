import React, { useState } from "react";
import HomeIcon from "@material-ui/icons/Home";
import FeaturedPlayListOutlinedIcon from "@material-ui/icons/FeaturedPlayListOutlined";
import AssignmentTurnedInOutlinedIcon from "@material-ui/icons/AssignmentTurnedInOutlined";
import PeopleAltOutlinedIcon from "@material-ui/icons/PeopleAltOutlined";
import NotificationsOutlinedIcon from "@material-ui/icons/NotificationsOutlined";
import SearchIcon from "@material-ui/icons/Search";
import LanguageIcon from "@material-ui/icons/Language";
import {useHistory} from 'react-router-dom'

import "./style.css";
import { Avatar, Button, Input } from "@material-ui/core";
import { useSelector } from "react-redux";

import { ExpandMore, Link } from "@material-ui/icons";




function Navbar() {
    const history = useHistory()

   const logout = () => {
    localStorage.removeItem("token")
    history.push("/login")
  }

  return (
    <div className="qHeader">
      <div className="qHeader__logo">
       <img src="https://i.ibb.co/RDvh4jM/ahmed.png" alt="ahmed" border="0"/>
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
            src="https://images-platform.99static.com//_QXV_u2KU7-ihGjWZVHQb5d-yVM=/238x1326:821x1909/fit-in/500x500/99designs-contests-attachments/119/119362/attachment_119362573"
         
          />
        </div>
        <NotificationsOutlinedIcon />
        <LanguageIcon />
        <Button>Add Question</Button>

        <div>
          <ul className="navbar-nav me-auto mb-2 mb-md-0">
            <li className="nav-item">
              <div className="nav-link logout-btn" onClick={logout}>
                Logout
              </div>
            </li>
          </ul>
        </div>
       
      </div>
    </div>
  );
}

export default Navbar
