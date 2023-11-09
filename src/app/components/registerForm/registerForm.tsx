"use client";

import styles from "./registerForm.module.scss";

export default function RegisterForm() {
  return (
    <form className={styles.form}>
      <label className={styles.label}>
        Nome:
        <input type="text" className={styles.input} />
      </label>
      <label className={styles.label}>
        Email:
        <input type="email" className={styles.input} />
      </label>
      <label className={styles.label}>
        Senha:
        <input type="password" className={styles.input} />
      </label>
      <label className={styles.label}>
        Confirme sua senha:
        <input type="password" className={styles.input} />
      </label>
      <button type="submit" className={styles.button}>
        Cadastrar
      </button>
    </form>
  );
}
