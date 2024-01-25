import React from "react";
import { Routes, Route } from "react-router-dom";
import Hero from "../pages/Heroes/Hero";
import Heroes from "../pages/Heroes/Heroes";
import AddHero from "../pages/Heroes/AddHero";
import EditHero from "../pages/Heroes/EditHero";

const HeroRoutes = () => (
  <Routes>
    <Route path="/:id" element={<Hero />} />
    <Route path="" element={<Heroes />} />
    <Route path="/add" element={<AddHero />} />
    <Route path="/edit/:id" element={<EditHero />} />
  </Routes>
);

export default HeroRoutes;
