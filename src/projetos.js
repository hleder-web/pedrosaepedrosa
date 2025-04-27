import React from "react";
import { createRoot } from "react-dom/client";
import PaginaFiltro from "./pages/projetos";
import "./styles/projetos.scss";

const root = createRoot(document.getElementById("root"));
root.render(<PaginaFiltro />);
