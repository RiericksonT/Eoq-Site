import styles from "./cardProfile.module.scss";
import Image from "next/image";

interface CardProfileProps {
  name: string;
  username: string;
  avatar: string;
  url: string;
}

export default function CardProfile({
  name,
  username,
  avatar,
  url,
}: CardProfileProps) {
  return (
    <div className={styles.cardProfile}>
      <div className={styles.cardProfileHeader}>
        <Image
          src={avatar}
          alt={name}
          width={50}
          height={50}
          className={styles.cardProfileHeaderAvatar}
        />
        <div className={styles.cardProfileHeaderInfo}>
          <strong>{name}</strong>
          <span>{username}</span>
        </div>
      </div>
      <div className={styles.cardProfileContent}>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
          voluptatibus.
        </p>
      </div>
    </div>
  );
}
