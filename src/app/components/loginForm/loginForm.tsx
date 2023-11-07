"use client";

import styles from "./loginForm.module.scss";
import * as yup from "yup";
import { yupResolver } from "@hookform/resolvers/yup";
import { SubmitHandler, useForm } from "react-hook-form";

type LoginFormProps = {
  email: string;
  password: string;
};

yup.setLocale({
  string: {
    email: "Email inválido",
  },
  mixed: {
    required: "Campo obrigatório",
  },
});

const loginFormSchema = yup.object().shape({
  email: yup
    .string()
    .email()
    .required("Campo obrigatório")
    .typeError("Email inválido"),
  password: yup.string().required(),
});

export default function LoginForm() {
  const loginSubmit: SubmitHandler<LoginFormProps> = ({ email, password }) => {
    alert(`${email} & ${password}`);
  };

  const {
    handleSubmit,
    register,
    formState: { errors },
  } = useForm<LoginFormProps>({
    resolver: yupResolver(loginFormSchema),
  });

  return (
    <form onSubmit={handleSubmit(loginSubmit)} className={styles.form}>
      <label className={styles.label}>
        Email:
        <input type="email" className={styles.input} {...register("email")} />
        <p>{errors.email?.message}</p>
      </label>
      <label className={styles.label}>
        Senha:
        <input
          type="password"
          className={styles.input}
          {...register("password")}
        />
        <p>{errors.password?.message}</p>
      </label>
      <button type="submit" className={styles.button}>
        Entrar
      </button>
      <a href="/recuperarSenha" className={styles.link}>
        Esqueceu sua senha?
      </a>
    </form>
  );
}
