"use client";
import CardProfile from "@/app/components/cardProfile/cardProfile";
import styles from "./feed.module.scss";
import Loader from "@/app/components/loader/loader";
import { signOut, useSession } from "next-auth/react";
import QuestInput from "@/app/components/questInput/quetsInput";

export default function Feed() {
  const { data: session, status } = useSession();
  if (status === "loading") {
    return <Loader />;
  } else if (!session) {
    window.location.href = "/";
  }

  return (
    <main className={styles.main}>
      <div className={styles.containerEsquerdo}>
        <CardProfile
          name="Rafael"
          username="rafael"
          avatar="/assets/logo.png"
          url={""}
        />
      </div>
      <div className={styles.containerCentral}>
        <QuestInput
          name="Rafael"
          username="rafael"
          avatar="/img/avatar.jpg"
          url={""}
        />
      </div>
      <div className={styles.containerDireito}>
        <CardProfile
          name="Rafael"
          username="rafael"
          avatar="/img/avatar.jpg"
          url={""}
        />
      </div>
    </main>
  );
}
