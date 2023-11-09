"use client";

import styles from "@/styles/home.module.scss";
import Image from "next/image";
import { use, useEffect, useState } from "react";

import { useSession } from "next-auth/react";
import LoginPage from "./pages/loginPage/loginPage";
import RegisterPage from "./pages/registerPage/resgisterPage";
import DefaultPage from "./pages/defaultPage/defaultPage";
import Loader from "./components/loader/loader";

export default function Home() {
  const [option, setOption] = useState("default");

  function changeOption(option: string) {
    setOption(option);
  }

  const { data: session, status } = useSession();

  if (status === "loading") {
    return <Loader />;
  } else if (session && session.user) {
    window.location.href = "/feed";
  } else {
    return (
      <main className={styles.main}>
        <div className={styles.containerEsquerdo}>
          <Image
            src={"/assets/drawAcessing.png"}
            alt="Moça com duvidas acessando o site do É o que?"
            width={500}
            height={500}
          />
          <h3 className={styles.bemVindo}>
            Bem vindo ao <span>É o que?</span>
          </h3>
          <p className={styles.descricao}>
            Um site para você compartilhar suas dúvidas e ajudar outras
            pessoas!!
          </p>
        </div>
        <div className={styles.containerDireito}>
          {option === "login" ? (
            <LoginPage props={changeOption} />
          ) : option === "register" ? (
            <RegisterPage props={changeOption} />
          ) : (
            <DefaultPage props={changeOption} />
          )}
        </div>
      </main>
    );
  }
}
