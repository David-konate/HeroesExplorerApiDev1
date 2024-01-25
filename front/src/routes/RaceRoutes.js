// RaceRoutes.js
import React from "react";
import { Routes, Route } from "react-router-dom";
import Race from "../pages/Races/Race";
import Races from "../pages/Races/Races";
// import AddRace from "../pages/Races/AddRace";
// import EditRace from "../pages/Races/EditRace";

const RaceRoutes = () => (
  <Routes>
    {/* Routes pour Race */}
    <Route path="/:id" element={<Race />} />
    <Route path="" element={<Races />} />
    {/* <Route path="/race/add" element={<AddRace />} />
    <Route path="/race/edit/:id" element={<EditRace />} /> */}
  </Routes>
);

export default RaceRoutes;
