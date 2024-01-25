import React from "react";
import { Route } from "react-router-dom";
import Skill from "./pages/Skill/Skill";
import Skills from "./pages/Skill/Skills";
import AddSkill from "./pages/Skill/AddSkill";
import EditSkill from "./pages/Skill/EditSkill";

const SkillRoutes = () => (
  <>
    {/* Routes pour Skill */}
    <Route path="/:id" element={<Skill />} />
    <Route path="" element={<Skills />} />
    <Route path="/add" element={<AddSkill />} />
    <Route path="/edit/:id" element={<EditSkill />} />
  </>
);

export default SkillRoutes;
