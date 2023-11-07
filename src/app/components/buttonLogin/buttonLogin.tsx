import Link from "next/link";
import styles from "./buttonLogin.module.scss";
import Image from "next/image";

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
  return (
    <Link href="/login" className={styles.buttonLogin}>
      <Image
        src={src}
        alt={alt}
        width={width}
        height={height}
        className={styles.icon}
      />
      <p>{text}</p>
    </Link>
  );
}
