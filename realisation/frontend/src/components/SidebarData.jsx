import React from "react";
import {AiFillHome} from "react-icons/ai";
import {FaChalkboardTeacher} from "react-icons/fa";
import {HiUserGroup} from "react-icons/hi";
import {FaClipboardList} from "react-icons/fa";
import Dashboard from "./pages/Dashboard";
import Tutor from "./pages/Tutor";
import Apprentice from "./pages/Apprentice";
import Brief from "./pages/Brief";


export const SidebarData = [
    {
        icon: <AiFillHome/>,
        title:"Dashboard",
        link:"/",
        component:<Dashboard/>
    },

    {
        icon: <FaChalkboardTeacher/>,
        title:"Formateurs",
        link:"/tutor",
        component:<Tutor/>
    },

    {
        icon: <HiUserGroup/>,
        title:"Apprenats",
        link:"/apprentice",
        component:<Apprentice/>
    },

    {
        icon:<FaClipboardList/>,
        title:"Briefs",
        link:"/brief",
        component:<Brief/>
    }
]