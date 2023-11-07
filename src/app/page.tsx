"use client";

import styles from "@/styles/home.module.scss";
import Image from "next/image";
import { useState } from "react";
import LoginPage from "./pages/loginPage/loginPage";

export default function Home() {
  const [option, setOption] = useState("");

  return <>{option === "login" ? <LoginPage /> : <></>}</>;
}
