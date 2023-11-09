import Divider from "@/app/components/divider/divider";
import styles from "./defaultPage.module.scss";

export default function DefaultPage(props: any) {
  return (
    <>
      <h2 className={styles.titulo}>Faça login ou cadastre-se</h2>
      <button className={styles.button} onClick={() => props.props("login")}>
        Login
      </button>
      <Divider text="ou" />
      <button className={styles.button} onClick={() => props.props("register")}>
        Cadastre-se
      </button>
    </>
  );
}
