import Image from "next/image";
import styles from "./loader.module.scss";

export default function Loader() {
  return (
    <div className={styles.loading}>
      <Image
        src={"/assets/logo.png"}
        alt={""}
        width={75}
        height={75}
        className={styles.logo}
      />
    </div>
  );
}
