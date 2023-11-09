import ButtonLogin from "@/app/components/buttonLogin/buttonLogin";
import Divider from "@/app/components/divider/divider";
import LoginForm from "@/app/components/loginForm/loginForm";
import styles from "@/styles/home.module.scss";
import Image from "next/image";

export default function LoginPage(props: any) {
  return (
    <>
      <Image
        src={"/assets/logo.png"}
        alt="logotipo do É o que?"
        width={75}
        height={75}
      />
      <h3>Faça seu login com:</h3>
      <div className={styles.containerBotoes}>
        <ButtonLogin
          src={"/assets/googleLogo.png"}
          alt={"logo do google"}
          width={25}
          height={25}
          text={"Google"}
        />
        <ButtonLogin
          src={"/assets/facebookLogo.png"}
          alt={"logo do facebook"}
          width={25}
          height={25}
          text={"Facebook"}
        />
      </div>
      <Divider text={"ou"} />
      <div className={styles.containerFormulario}>
        <LoginForm />
      </div>
      <button
        className={styles.botaoVoltar}
        onClick={() => props.props("default")}
      >
        {"< Voltar"}
      </button>
    </>
  );
}
