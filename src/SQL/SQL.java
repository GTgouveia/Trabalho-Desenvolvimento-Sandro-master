package SQL;

import java.sql.*;
import javax.swing.*;

public class SQL {
    private static Connection conn = null;

    public static Connection inicializarBD() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
             conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/bdmfds?useTimezone=true&serverTimezone=UTC", "root", "");


            return conn;
        }catch (Exception e) {
            JOptionPane.showMessageDialog(null, e);
            return null;
        }
    }

    public static boolean validaLogin(String usuario, String senha) throws SQLException {
        boolean autentica = false;

        try {
            //Quando restaurar o banco de dados, inserir o usuário e senha padrão "admin, admin"
            PreparedStatement ps = conn.prepareStatement("select * from usuarios where usr_descricao = ? and usr_senha = ?");
            ps.setString(1, usuario);
            ps.setString(2, senha);
            System.out.println(usuario + " " + senha);

            try (ResultSet rs = ps.executeQuery()) {

                while (rs.next()) {
                    autentica = true;
                }
            } catch (Exception aa) {
                System.out.println("aa" + aa);
            }
            return autentica;
        } catch(Exception erroStat) {
            System.out.println(erroStat);
        }
        return autentica;
    }
}
