import Link from "next/link";
import styles from "./buttonLogin.module.scss";
import Image from "next/image";
import { signIn, useSession } from "next-auth/react";
import router from "next/router";

interface ButtonLoginProps {
  src: string;
  alt: string;
  width: number;
  height: number;
  text: string;
}

export default function ButtonLogin({
  src,
  alt,
  width,
  height,
  text,
}: ButtonLoginProps) {
  const { data: session } = useSession();

  if (session && session.user) {
    router.push("/home");
  }

  return (
    <>
      <button
        className={styles.buttonLogin}
        onClick={() => {
          signIn();
        }}
      >
        <Image
          src={src}
          alt={alt}
          width={width}
          height={height}
          className={styles.icon}
        />
        <p>{text}</p>
      </button>
    </>
  );
}
