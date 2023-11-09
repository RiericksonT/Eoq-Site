import RegisterForm from "@/app/components/registerForm/registerForm";
import styles from "./registerPage.module.scss";

export default function RegisterPage(props: any) {
  return (
    <div className={styles.container}>
      <h2 className={styles.titulo}>Cadastre-se</h2>
      <RegisterForm />
      <button
        className={styles.botaoVoltar}
        onClick={() => props.props("default")}
      >
        {"< Voltar"}
      </button>
    </div>
  );
}
