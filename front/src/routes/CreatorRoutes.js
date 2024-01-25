import React from "react";
import { Route } from "react-router-dom";
import Creator from "./pages/Creator/Creator";
import Creators from "./pages/Creator/Creators";
import AddCreator from "./pages/Creator/AddCreator";
import EditCreator from "./pages/Creator/EditCreator";

const CreatorRoutes = () => (
  <>
    {/* Routes pour Creator */}
    <Route path="/:id" element={<Creator />} />
    <Route path="" element={<Creators />} />
    <Route path="/add" element={<AddCreator />} />
    <Route path="/edit/:id" element={<EditCreator />} />
  </>
);

export default CreatorRoutes;
