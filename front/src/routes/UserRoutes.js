// UserRoutes.js
import React from "react";
import { Route } from "react-router-dom";
import User from "../pages/Users/User";
import Users from "../pages/User/Users"; // Assurez-vous que le chemin d'accès est correct
import AddUser from "../pages/User/AddUser"; // Assurez-vous que le chemin d'accès est correct
import EditUser from "../pages/User/EditUser"; // Assurez-vous que le chemin d'accès est correct

const UserRoutes = () => (
  <>
    {/* Routes pour User */}
    <Route path=":id" element={<User />} />
    <Route path="" element={<Users />} />
    <Route path="add" element={<AddUser />} />
    <Route path="edit/:id" element={<EditUser />} />
  </>
);

export default UserRoutes;
