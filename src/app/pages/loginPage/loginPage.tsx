import ButtonLogin from "@/app/components/buttonLogin/buttonLogin";
import Divider from "@/app/components/divider/divider";
import LoginForm from "@/app/components/loginForm/loginForm";
import styles from "@/styles/home.module.scss";
import Image from "next/image";

export default function LoginPage() {
  return (
    <main className={styles.main}>
      <div className={styles.containerEsquerdo}>
        <Image
          src={"/assets/drawAcessing.png"}
          alt="Moça com duvidas acessando o site do É o que?"
          width={500}
          height={500}
        />
        <h3 className={styles.bemVindo}>
          Bem vindo ao <span>É o que?</span>
        </h3>
        <p className={styles.descricao}>
          Um site para você compartilhar suas dúvidas e ajudar outras pessoas!!
        </p>
      </div>
      <div className={styles.containerDireito}>
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
        <button className={styles.botaoVoltar}>{"< Voltar"}</button>
      </div>
    </main>
  );
}
