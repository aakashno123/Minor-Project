import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.JOptionPane;

import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.File;

import javax.swing.JTextField;
import javax.swing.UIManager;
import javax.swing.UnsupportedLookAndFeelException;
import javax.swing.JButton;
import javax.swing.JFileChooser;
import javax.swing.ImageIcon;
import java.awt.Color;

public class RGUI extends JFrame {

	
	
    /**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	File[] listOfFiles; 
	private JPanel contentPane;
	private JTextField textRoll;
	private JTextField textSubject1;
	private JTextField textSubject2;
	private JTextField textSubject3;
	private JTextField textSubject4;
	private JTextField textSubject5;
	private JTextField textSubject6;

	/**
	 * Launch the application.
	 */
	
	static{
		try {
		
		UIManager.setLookAndFeel("com.sun.java.swing.plaf.windows.WindowsLookAndFeel");
	} catch (ClassNotFoundException | InstantiationException | IllegalAccessException
			| UnsupportedLookAndFeelException e1) {
		
		e1.printStackTrace();
	}
	}
	
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					RGUI frame = new RGUI();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public RGUI() {
		setTitle("Renamer");
		setResizable(false);
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 658, 514);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblSubjectName = new JLabel("Subject 1 Code :");
		lblSubjectName.setFont(new Font("Tahoma", Font.PLAIN, 15));
		lblSubjectName.setBounds(188, 150, 109, 19);
		contentPane.add(lblSubjectName);
		
		textSubject1 = new JTextField();
		textSubject1.setBounds(317, 149, 116, 22);
		contentPane.add(textSubject1);
		textSubject1.setColumns(10);
		
		JButton btnBrowse = new JButton("Create Directory");
		btnBrowse.setBackground(new Color(34, 139, 34));
		btnBrowse.setFont(new Font("Tahoma", Font.PLAIN, 15));
		btnBrowse.setBounds(269, 353, 164, 27);
		btnBrowse.addActionListener(new ActionListener() {
			
			@Override
			public void actionPerformed(ActionEvent e) {
				CreateDIr();
				
			}
		});
		contentPane.add(btnBrowse);
		
		JButton btnRename = new JButton("Rename");
		btnRename.setBackground(new Color(34, 139, 34));
		btnRename.setFont(new Font("Tahoma", Font.PLAIN, 15));
		btnRename.setBounds(321, 415, 112, 27);
		btnRename.addActionListener(new ActionListener() {
			
			@Override
			public void actionPerformed(ActionEvent e) {
				OpenFile();
				
			}
		});
		contentPane.add(btnRename);
		
		textRoll = new JTextField();
		textRoll.setColumns(10);
		textRoll.setBounds(317, 114, 116, 22);
		contentPane.add(textRoll);
		
		JLabel label = new JLabel("Roll No.          :");
		label.setFont(new Font("Tahoma", Font.PLAIN, 15));
		label.setBounds(193, 115, 104, 19);
		contentPane.add(label);
		
		JLabel lblSubjectCode = new JLabel("Subject 2 Code :");
		lblSubjectCode.setFont(new Font("Tahoma", Font.PLAIN, 15));
		lblSubjectCode.setBounds(188, 183, 109, 19);
		contentPane.add(lblSubjectCode);
		
		textSubject2 = new JTextField();
		textSubject2.setColumns(10);
		textSubject2.setBounds(317, 182, 116, 22);
		contentPane.add(textSubject2);
		
		JLabel lblSubjectCode_1 = new JLabel("Subject 3 Code :");
		lblSubjectCode_1.setFont(new Font("Tahoma", Font.PLAIN, 15));
		lblSubjectCode_1.setBounds(188, 216, 109, 19);
		contentPane.add(lblSubjectCode_1);
		
		textSubject3 = new JTextField();
		textSubject3.setColumns(10);
		textSubject3.setBounds(317, 215, 116, 22);
		contentPane.add(textSubject3);
		
		JLabel lblSubjectCode_2 = new JLabel("Subject 4 Code :");
		lblSubjectCode_2.setFont(new Font("Tahoma", Font.PLAIN, 15));
		lblSubjectCode_2.setBounds(188, 248, 109, 19);
		contentPane.add(lblSubjectCode_2);
		
		textSubject4 = new JTextField();
		textSubject4.setColumns(10);
		textSubject4.setBounds(317, 247, 116, 22);
		contentPane.add(textSubject4);
		
		JLabel lblSubjectCode_3 = new JLabel("Subject 5 Code :");
		lblSubjectCode_3.setFont(new Font("Tahoma", Font.PLAIN, 15));
		lblSubjectCode_3.setBounds(188, 281, 109, 19);
		contentPane.add(lblSubjectCode_3);
		
		textSubject5 = new JTextField();
		textSubject5.setColumns(10);
		textSubject5.setBounds(317, 280, 116, 22);
		contentPane.add(textSubject5);
		
		textSubject6 = new JTextField();
		textSubject6.setColumns(10);
		textSubject6.setBounds(317, 313, 116, 22);
		contentPane.add(textSubject6);
		
		JLabel lblSubjectCode_4 = new JLabel("Subject 6 Code :");
		lblSubjectCode_4.setFont(new Font("Tahoma", Font.PLAIN, 15));
		lblSubjectCode_4.setBounds(188, 314, 109, 19);
		contentPane.add(lblSubjectCode_4);
		
		JLabel lblAnswerSheetViwing = new JLabel("Answer Sheet Viwing System Support");
		lblAnswerSheetViwing.setFont(new Font("Serif", Font.BOLD | Font.ITALIC, 30));
		lblAnswerSheetViwing.setBounds(89, 13, 480, 39);
		contentPane.add(lblAnswerSheetViwing);
		
		JLabel label_1 = new JLabel("");
		label_1.setIcon(new ImageIcon("F:\\Java Workspace\\Re-namer\\resource\\e.jpg"));
		label_1.setBounds(0, 0, 652, 479);
		contentPane.add(label_1);
	}
	
	public void OpenFile(){
		
		JFileChooser fc=new JFileChooser();
		fc.setCurrentDirectory(new File("D:\\XAMPP\\htdocs\\myphpfiles"));
		fc.setDialogTitle("Open File");
		
		try{
			if(fc.showOpenDialog(null)==JFileChooser.APPROVE_OPTION){
				String path=fc.getCurrentDirectory().getAbsolutePath();
				
				 File folder = new File(path+"\\");
			        File[] listOfFiles = folder.listFiles();
			        int j;
			        for (int i = 0; i < listOfFiles.length; i++) {
			        	
			            if (listOfFiles[i].isFile()) {
			            	j=i+1;
			                File f = new File(path+"\\"+listOfFiles[i].getName()); 

			                f.renameTo(new File(path+"\\"+j+".jpg"));
			            }
			        }
				
			}
			
		}catch(Exception e){
			JOptionPane.showMessageDialog(null,"Cannot open the selected file!!");
		}
	}
	
public void	CreateDIr(){
	JFileChooser fc=new JFileChooser();
	fc.setCurrentDirectory(new File("D:\\XAMPP\\htdocs\\myphpfiles"));
	fc.setDialogTitle("Open File");
	fc.setFileSelectionMode(JFileChooser.DIRECTORIES_ONLY);
	try{
		if(fc.showOpenDialog(null)==JFileChooser.APPROVE_OPTION){
			String path=fc.getSelectedFile().getAbsolutePath();
			String Roll=textRoll.getText();
			String subject1=textSubject1.getText();
			String subject2=textSubject2.getText();
			String subject3=textSubject3.getText();
			String subject4=textSubject4.getText();
			String subject5=textSubject5.getText();
			String subject6=textSubject6.getText();
			new File(path+"\\"+Roll+"\\"+subject1).mkdirs();
			new File(path+"\\"+Roll+"\\"+subject2).mkdirs();
			new File(path+"\\"+Roll+"\\"+subject3).mkdirs();
			new File(path+"\\"+Roll+"\\"+subject4).mkdirs();
			new File(path+"\\"+Roll+"\\"+subject5).mkdirs();
			new File(path+"\\"+Roll+"\\"+subject6).mkdirs();
			new File(path+"\\"+Roll+"\\"+"Profile").mkdirs();
		}
		
	}catch(Exception e){
		JOptionPane.showMessageDialog(null, e.getStackTrace());
		
	}
	
}
}
