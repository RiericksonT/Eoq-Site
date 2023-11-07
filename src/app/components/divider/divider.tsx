import styles from "./divider.module.scss";

interface DividerProps {
  text: string;
}

export default function Divider({ text }: DividerProps) {
  return (
    <div className={styles.divider}>
      <div className={styles.line} />
      <div className={styles.text}>{text}</div>
      <div className={styles.line} />
    </div>
  );
}
