// App.js
import React from "react";
import { Routes, Route } from "react-router-dom";
import Home from "./pages/Home";
import RaceRoutes from "./routes/RaceRoutes";
// import UserRoutes from "./routes/UserRoutes";
// import CreatorRoutes from "./routes/CreatorRoutes";
// import SkillRoutes from "./routes/SkillRoutes";
import HeroRoutes from "./routes/HeroRoutes";
import "./App.scss";
// import AlignmentRoutes from "./routes/AlignmentRoutes";

function App() {
  return (
    <Routes>
      <Route path="/" element={<Home />} />
      <Route path="/race/*" element={<RaceRoutes />} />
      <Route path="/hero/*" element={<HeroRoutes />} />
      {/* <Route path="/user/*" element={<UserRoutes />} />
      <Route path="/creator/*" element={<CreatorRoutes />} />
      <Route path="/skill/*" element={<SkillRoutes />} />
      <Route path="/alignment/*" element={<AlignmentRoutes />} /> */}
    </Routes>
  );
}

export default App;
