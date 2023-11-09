import styles from "./questInput.module.scss";
import Image from "next/image";

interface QuestInputProps {
  name: string;
  username: string;
  avatar: string;
  url: string;
}

export default function QuestInput({
  name,
  username,
  avatar,
  url,
}: QuestInputProps) {
  return (
    <div className={styles.container}>
      <div className={styles.containerInput}>
        <input
          type="text"
          placeholder="Qual sua divida"
          className={styles.input}
        />
      </div>
      <div className={styles.containerFooter}>
        <div className={styles.containerAvatar}>
          <Image
            src={avatar}
            alt={name}
            width={40}
            height={40}
            className={styles.avatar}
          />
        </div>
        <div className={styles.containerButton}>
          <button className={styles.button}>Publicar</button>
        </div>
      </div>
    </div>
  );
}
