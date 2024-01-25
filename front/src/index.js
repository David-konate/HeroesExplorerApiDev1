import React from "react";
import { BrowserRouter } from "react-router-dom";
import ReactDOM from "react-dom/client";
import App from "./App";
import MenuAppBar from "./components/NavBar";

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
  <React.StrictMode>
    <MenuAppBar />
    <BrowserRouter>
      <App />
    </BrowserRouter>
  </React.StrictMode>
);
